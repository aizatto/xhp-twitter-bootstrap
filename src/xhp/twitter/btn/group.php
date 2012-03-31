<?php

class :twitter:btn:group extends :ui:base {

  attribute :div;

  public function render() {
    $element =
      <div class="btn-group">
        {$this->getChildren()}
      </div>;

    return $this->transferAttributes($element);
  }
}
