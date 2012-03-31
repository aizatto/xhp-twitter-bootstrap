<?php

class :twitter:navbar:brand extends :ui:base {

  attribute :a;

//  children (:x:base);

  public function render() {
    $children = $this->getChildren();
    $child = array_shift($children);
    if ($child && is_object($child)) {
      $this->addClass('brand');
      $this->transferAttributes($child);
    }

    return $child;
  }

}
