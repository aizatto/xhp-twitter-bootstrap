<?php

class :twitter:row extends :ui:base {

  public function render() {
    return
      <div class="row">
        {$this->getChildren()}
      </div>;
  }

}
