<?php

class   :twitter:alert:close extends :ui:base {
  
  attribute :a;

  children (:x:base);

  public function render() {
    $element = array_shift($this->getChildren());
    $this->addClass('close');
    return $this->transferAttribute($element);
  }

}
