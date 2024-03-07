<?php 




class Pc_QuestionsQuestionsModuleFrontController extends ModuleFrontController
{   

    public function initContent()
    {   
      parent::initContent();

      $this->context->smarty->assign(array(
        'questions' => $this->module->getQA(false,true),
        
    ));
      $this->setTemplate('module:pc_questions/views/templates/front/allquestions.tpl');
    // return $this->display(__FILE__, 'pc_questions.tpl');
    }

}