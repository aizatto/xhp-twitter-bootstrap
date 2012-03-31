<?php

class :twitter:alert:heading extends :ui:base {
  
  attribute :div;

  children (%flow);

  public function render() {
    $children = $this->getChildren();
    $element = array_shift($children);
    $this->addClass('alert-heading');
    return $this->transferAttributes($element);
  }

}
