<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAnime extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $qtdSeasons;
    public $qtdEpisodes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $qtdSeasons, $qtdEpisodes)
    {
        $this->name = $name;
        $this->qtdSeasons = $qtdSeasons;
        $this->qtdEpisodes = $qtdEpisodes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.new-anime');
    }
}
