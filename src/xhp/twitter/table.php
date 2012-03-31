<?php

class :twitter:table extends :ui:base {
  
  attribute
    :table,
    bool striped,
    bool bordered,
    bool condensed;


  public function render() {
    $element =
      <table>
        {$this->getChildren()}
      </table>;

    if ($this->getAttribute('striped')) {
      $element->addClass('table-striped');
    }

    if ($this->getAttribute('striped')) {
      $element->addClass('table-striped');
    }

    if ($this->getAttribute('condensed')) {
      $element->addClass('table-condensed');
    }

    return $element;
  }

}
