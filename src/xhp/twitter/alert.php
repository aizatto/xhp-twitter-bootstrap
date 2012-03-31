<?php

class :twitter:alert extends :ui:base {

  attribute
    :div,
    enum {
      'warning',
      'error',
      'success',
      'info'
    } type = 'warning',
    bool block = false;

  // should these be a category instead
  children (:twitter:alert:close?, :twitter:alert:header?, (pcdata | %flow)*);

  public function render() {
    $children = $this->getChildren();
    $close = $this->getChildren('twitter:alert:close');
    $heading = $this->getChildren('twitter:alert:heading');

    if ($close) {
      array_shift($children);
    }

    if ($heading) {
      array_shift($children);
    }

    $element =
      <div class="alert">
        {$close}
        {$heading}
        {$children}
      </div>;

    $type = $this->getAttribute('type');
    if ($type) {
      $element->addClass('alert-'.$type);
    }

    if ($this->getAttribute('block')) {
      $element->addClass('alert-block');
    }

    $this->transferAttributes($element);
    return $element;
  }

}
