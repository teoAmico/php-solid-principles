<?php 

namespace SingleResponsabilityPrinciple\BreakPrinciple;

class User
{

    public function create(array $data)
    {
        try {
            //...save user to database
        } catch (Exception $exc) {
            $this->logError($exc->getMessage());
        }
    }
    
    /*
     * logError () method break single responsability principle 
     * because this class has more then one responsability 
     * and this method has nothing to do with User class
     */
    
    public function logError($message){
        //.. write error to vile
    }
}
