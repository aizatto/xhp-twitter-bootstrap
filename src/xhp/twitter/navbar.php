<?php

class :twitter:navbar extends :ui:base {

  attribute
    :div,
    bool fixedtop = false;

  children (:twitter:navbar:brand?, :ul?);

  public function render() {
    $brand = $this->getChildren('twitter:navbar:brand');
    $nav = $this->getChildren('twitter:navbar:nav');

    $element = 
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            {$brand}
            {$nav}
          </div>
        </div>
      </div>;

    if ($this->getAttribute('fixedtop')) {
      $element->addClass('navbar-fixed-top');
    }

    return $this->transferAttributes($element);
  }
}
