<?php

namespace Modules\Lead\Models;


use Eloquent;
use Mail;

class Lead extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'branch'
    ];

    /**
     * The attributes that are appended.
     *
     * @var array
     */
    protected $appends = [
        'sentLabel'
    ];

    public function getSentLabelAttribute()
    {
        return $this->sent ? 'Sent' : 'Pending';
    }

    public function send()
    {
        $lead = $this;
        $subject = settings()->get('leads.mails.subject');

        foreach (explode(',', settings()->get('leads.mails.to')) as $email) {
            Mail::send("Lead.Resources.views.mail", compact("lead", "subject"), function ($message) use ($email, $subject){
                $message->from('tech@jumppeak.net', 'Jumppeak');
                $message->to($email);
                $message->subject($subject);
            });
        }
    }
}
