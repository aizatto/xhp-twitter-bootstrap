<?php

class :twitter:btn:toolbar extends :ui:base {

  attribute :div;

  children (:twitter:btn:group)*;

  public function render() {
    $element =
      <div class="btn-toolbar">
        {$this->getChildren()}
      </div>;

    return $this->transferAttributes($element);
  }
}
