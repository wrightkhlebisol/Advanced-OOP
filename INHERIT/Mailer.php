<?php
abstract class Mailer
{
    public function send($to, $from, $body)
    {
    }
}

class UserMailer extends Mailer
{
    private $from;

    private $body;

    public function SendWelcomeEmail(User $user)
    {
        return $this->send($user->email, $this->from, $this->body);
    }
}
