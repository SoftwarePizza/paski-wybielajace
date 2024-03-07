public function getContent()
    {   
        // $helper = new HelperForm();

        // $helper->table = $this->table;
        // $helper->name_controller = $this->name;
        // $helper->token = Tools::getAdminTokenLite('AdminModules');
        // $helper->currentIndex = AdminController::$currentIndex . '&' . http_build_query(['configure' => $this->name]);
        // $helper->submit_action = 'submit' . $this->name;
        // // $elements = $this->getElements(); // Retrieve your list of elements

        $output = '';
        // $output .= '<div id="question-list">';
        // $output .= '<div class="header"><h1>Pytania i odpowiedzi</h1></div>';
        // $output .= '<div class="content"><table><tbody>';
        // foreach ($elements as $element) {
        //     // Display each element with an "Edit" button
        //     $output .= '<tr>';
        //     $output .= '<td>'.$element['name'].'</td>';
        //     $output .= '<td><a href="#">Edit</a><td>';
        //     // $output .= '<a href="' . $this->getEditUrl($element['id']) . '">Edit</a>';
        //     $output .= '</tr>';
            
        // }
        // $output .= '</tbody></table></div>';
        // $output .= '</div>';
        //     $sql = 'SELECT * FROM ps_product';
        //     $rows= Db::getInstance()->executeS($sql);
        //     // Define columns to display
        //         $helper->listTotal = count(MyModuleObject::getAll());
        //         $helper->shopLinkType = '';

        //         $helper->actions = array('edit');
        //         $helper->showToolbar = true;

        //         // Return the rendered list
        //         return $helper->generateList(MyModuleObject::getAll(), array(
        //             'id' => array('title' => $this->l('ID'), 'align' => 'center', 'type' => 'text'),
        //             'name' => array('title' => $this->l('Name'), 'align' => 'center', 'type' => 'text'),
        //             'description' => array('title' => $this->l('Description'), 'align' => 'center', 'type' => 'text'),
        //         ));

        // return $helper->generateForm($form);

        
        $helper = new HelperList();
         
        // $helper->shopLinkType = '';
         
        $helper->simple_header = true;
         
        // Actions to be displayed in the "Actions" column
        $helper->actions = array('edit', 'delete', 'view');
         
        $helper->identifier = 'id_category';
        $helper->show_toolbar = true;
        $helper->title = 'HelperList';
        $helper->table = $this->name.'_categories';
         
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        return $helper;
    }
    public function getElements()
    {
        // Replace this with logic to retrieve your elements from the database
        // Example: $elements = Db::getInstance()->executeS('SELECT * FROM ' . _DB_PREFIX_ . 'your_table');
        $elements = array(
            array('id' => 1, 'name' => 'Element 1'),
            array('id' => 2, 'name' => 'Element 2'),
            // Add more elements as needed
        );

        return $elements;
    }