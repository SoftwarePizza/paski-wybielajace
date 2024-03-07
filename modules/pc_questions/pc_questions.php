<?php 


if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(_PS_ROOT_DIR_.'/modules/pc_questions/src/classes/objectQA.php');


class pc_questions extends Module
{
    const AVAILABLE_HOOKS = [
        'displayHome',
    ];
    private $fields_list;
    public function __construct()
    {
        $this->name = 'pc_questions';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Panda Coders';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->ps_versions_compliancy = [
            'min' => '1.7.8.9',
            'max' => '1.7.8.10',
        ];
        parent::__construct();

        $this->displayName = $this->l('Pytania i odpowiedzi');
        $this->description = $this->l(' Description of the module visible in the BO');
        $this->controllers = array('questions');
       
        if (!Configuration::get('pc_questions')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (parent::install() && 
            $this->registerHook(self::AVAILABLE_HOOKS) &&
            $this->instalTables()&&
            $this->addFirstElement()) {
            return true;
        }

        return false;

    }

    public function uninstall()
    {
        return parent::uninstall() && $this->dropTables();;
    }


    public function hookDisplayHome($params)
    {    
        $this->context->smarty->assign(array(
            'questions' => $this->getQA(false,true),
            
        ));
        return $this->display(__FILE__, 'pc_questions.tpl');
    }
     public function instalTables()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `" . _DB_PREFIX_ . "questionsAndAnswers` (
           `id` INT NOT NULL AUTO_INCREMENT ,
            `question` VARCHAR(255) NOT NULL , 
            `answer` VARCHAR(2000) NOT NULL , 
            PRIMARY KEY (`id`)
        ) ENGINE=" . _MYSQL_ENGINE_ . " DEFAULT CHARSET=utf8;
        ";
        
       
        if(!Db::getInstance()->execute($sql) )
        {
            return false;
        }
        

        return  true;
    }

    public function addFirstElement()
    {   
        $sqlAdd = "INSERT INTO `ps_questionsAndAnswers` (`id`, `question`, `answer`) VALUES ('1', 'Nowe Pytanie', '')";
        if(!Db::getInstance()->execute($sqlAdd) )
        {
            return false;
        }
        return true;
    }
    public function dropTables()
    {
        $sql = "DROP TABLE IF EXISTS `" . _DB_PREFIX_ . "questionsAndAnswers`";
    
        return !Db::getInstance()->execute($sql) ? false : true;
    }

    public function getContent()
    {   
        $config = Tools::getAllValues();
        if(Tools::isSubmit('submit' . $this->name.'Edit'))
        {   
            $id = Tools::getValue('id');
            $question = (string) Tools::getValue('question');
            $answer = (string) Tools::getValue('answer');

            if(!empty($question) && !empty($id) && !empty($answer))
            {
                $QA = new ObjectQA ();
                $QA->id = $id;
                $QA->question = $question;
                $QA->answer = $answer;

                if($QA->save())
                {
                    $this->context->controller->confirmations[] = $this->l('Zapisano zmiany.');
                }else{
                    $this->context->controller->errors[] = $this->l('Wystąpił błąd');
                }
            }elseif($id == 'new'){
                $QA = new ObjectQA ();
                $QA->question = $question;
                $QA->answer = $answer;
            }else{
                $this->context->controller->errors[] = $this->l('Prosze uzupełnić dane');
            }
        }
        //render view
        if(isset($config['deletepc_questions']) && isset($config['id'])){
            if($config['id'] == 1){
                $this->context->controller->errors[] = $this->l('Nie można usunąć tego obiektu');
            }else{
                $qa = new ObjectQA($config['id']);
                $qa->delete();
            }
        }
       if(isset($config['action']) && isset($config['id']) && $config['action']=='edit' && !isset($config['deletepc_questions']))
       {    
            if($config['id']==1){
                return $this->displayForm($config['id'],true);
            }
            return $this->displayForm($config['id']);
            
          

       }
        return $this->initList('Lista');
      
    }
    private function initList($str)
{   
    $output = '';
    $this->fields_list = array(
        'id' => array(
            'title' => $this->l('Id'),
            'width' => 140,
            'type' => 'text',
        ),
        'question' => array(
            'title' => $this->l('Question'),
            'width' => 140,
            'type' => 'text',
        ),
    );
    $helper = new HelperList();
     
    // $helper->shopLinkType = '';
     
    $helper->simple_header = true;
     
    // Actions to be displayed in the "Actions" column
    $helper->actions = array('edit','delete');
     
    $helper->identifier = 'id';
    $helper->show_toolbar = false;
    $helper->title = 'Pytania i odpowiedzi';
    $helper->table = $this->name;
     
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&action=edit';
    return  $output . $helper->generateList($this->getQA(),$this->fields_list);
}

    /**
     * Return all objectQA Or if pass Id return specific once 
     * @return PDOStatement|array|bool|mysqli_result|resource|null
     */
    public function getQA($id = Null,$front = null){
        $res = [];
        $sql = 'SELECT id ,question,answer FROM `' . _DB_PREFIX_ . 'questionsAndAnswers` WHERE ';
        
       if($id != Null)
       {
            $sql.= '`id` ='.$id;
       }elseif($front)
       {
            $sql.= '`id` != 1';
       }else{
            $sql.= '1';
       }
       return Db::getInstance()->executeS($sql);
    }
    

    public function displayForm($id,$newElement = false)
{
    // Init Fields form array
    $form = [
        'form' => [
            'legend' => [
                'title' => $this->l('Edycja'),
            ],
            'input' => [
                [
                    'type' => 'text',
                    'label' => $this->l('Pytanie'),
                    'name' => 'question',
                    'size' => 225,
                    'required' => true,
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Odpowiedź'),
                    'name' => 'answer', // The name of the field
                    'required' => true, // Set to true if it's a required field
                    'cols' => 60, // Number of columns in the textarea
                    'rows' => 10, // Number of rows in the textarea
                ],
                [
                    'type' => 'hidden',
                    'name' => 'id', 
                    'required' => true, 
                ],
            ],
            'submit' => [
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right',
            ],
        ],
    ];

    $helper = new HelperForm();
    // Module, token and currentIndex
    $helper->table = $this->table;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex . '&' . http_build_query(['configure' => $this->name]);
    $helper->submit_action = 'submit' . $this->name.'Edit';
    
    // Default language
    $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');
    
    if($newElement)
    {
        $form['input'][] = [
            [
                'type' => 'hidden',
                'name' => 'newElement',
                'value' => true,
                'required' => true,
            ],
        ];

        $helper->fields_value['id'] ='new';
        $helper->fields_value['question'] ='';
        $helper->fields_value['answer'] ='';
    }else{
        $QA = $this->getQA($id);
        $helper->fields_value['id'] =$QA[0]['id'];
        $helper->fields_value['question'] =$QA[0]['question'];
        $helper->fields_value['answer'] = $QA[0]['answer'];
    }
   
    return $helper->generateForm([$form]);
}   
   
    
}