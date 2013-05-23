<?php
/**
 * YaBOB
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    YaBOB
 * @package     YaBOB_Shell
 * @copyright   Copyright (c) 2013 YaBOB. (https://github.com/rootindex/abbob)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once 'abstract.php';

/**
 * YaBOB NewEvonyAccount Shell Script
 *
 * @category    YaBOB
 * @package     YaBOB_Shell
 * @author      YaBOB Core Team <core@undisclosed>
 */
class YaBOB_Shell_Newaccount extends YaBOB_Shell_Abstract
{
	/**
     * Run script
     *
     */
    public function run()
    {
    	$user = $this->getArg('user');
    	$pass = $this->getArg('pass');
    	$sex = $this->getArg('sex');
    	$email = $this->getArg('email');
    	$server = $this->getArg('server');
    	
    	if($user && $pass && $email){
	    	echo $user;
	    	
    	}else{
	    	echo $this->usageHelp();
    	}
    }
    
    /**
     * Retrieve Usage Help Message
     *
     */
    public function usageHelp()
    {
        return <<<USAGE
Usage:  php -f newaccount.php -- [options]

  --user <username>             Username on game server
  --pass <password>             Password for global login
  --sex <user_sex>              Sex Male 0 / Female 1 (0 default)
  --email <email_address>       Email address global login
  --server <server>             Game Server (ss1 default) 
  
  help                          This help


USAGE;
    }


}

$shell = new YaBOB_Shell_Newaccount();
$shell->run();