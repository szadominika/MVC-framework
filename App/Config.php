<?php

namespace App;

/**
 * Application configuration
 *
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvcuser';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'mvcuser';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'secret';

    
    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = false;

    /**
     * secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'UCbz7rXmJdW8Rjb4yItgqUoFtsy0hYzd';

    
   /**
     * Set the SMTP server to send through
     * @var string
     */
    const SMTP_HOST = 'smtp.gmail.com';

    
    /**
     * Set the  SMTP username
     * @var string
     */
    const SMTP_USER = 'konto.robocze.dominika@gmail.com';

    
    /**
     * Set the  SMTP password
     * @var string
     */
    const SMTP_PASS = 'jtolhaawrtqngrjy';

  

}
