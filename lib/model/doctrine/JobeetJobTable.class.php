<?php

class JobeetJobTable extends Doctrine_Table
{
public function getActiveJobs()
  {
    $q = $this->createQuery('j')
      ->where('j.expires_at > ?', date('Y-m-d h:i:s', time()));
 
    return $q->execute();
  }

}