<?php 

namespace SingleResponsabilityPrinciple\FixPrinciple;

class User
{
    protected $logger;


    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create(array $data)
    {
        try {
            //...save user to database
        } catch (Exception $exc) {
            $this->logger->writeToFile($exc->getMessage());
        }
    }
    
}
