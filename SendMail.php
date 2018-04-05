<?php

class SendMail{
	
	protected $html;
	protected $subject;
	protected $from;
	protected $sender;
	protected $bcc = '';
	protected $cc = '';
	protected $replyTo;

	public function setConfig($config){
		$this->subject = $config['subject'];
		$this->sender = $config['sender'];
		$this->from = $config['from'];
		$this->bcc = $config['bcc'];
		$this->cc = $config['cc'];
		$this->replyTo = $config['reply_to'];
	}
	public function getHeader(){
		$headers = 'From: '.$this->sender.'  <'.$this->from.'>' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Type: text/html;charset=UTF-8' . "\r\n" .
		'Bcc: '.$this->bcc.'' . "\r\n" .
		'Cc: '.$this->cc.'' . "\r\n" .
        'Reply-To: '.$this->replyTo.'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion(); 
		
		return $headers;
	}
	public function sendEmail($html = null, $to = null){
        $result = mail($to,$this->subject,$html,$this->getHeader());    
        if(!$result){
            return false;
        }else{
			return true;
		}
    }
}
