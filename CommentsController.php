<?php

class CommentsController {
    private $logger;
    private $db;

    /**
     * @param $logger
     * @param $db
     */
    public function __construct($logger, $db)
    {
        $this->logger = $logger;
        $this->db = $db;
    }

    public function all()
    {
        $comments = [ // we could fetch it from db
            'Lorem ipsum 1',
            'Lorem ipsum 2',
            'Lorem ipsum 3',
            'Lorem ipsum 4',
        ];
        foreach ($comments as $comment) {
            $this->logger->log('info', sprintf('Comment: %s', $comment));
        }
    }
}