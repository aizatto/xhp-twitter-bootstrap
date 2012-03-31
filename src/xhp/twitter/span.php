<?php

class :twitter:span extends :ui:base {

  attribute int span @required;

  public function render() {
    $class= 'span'.$this->getAttribute('span');

    return
      <div class={$class}>
        {$this->getChildren()}
      </div>;
  }

}

