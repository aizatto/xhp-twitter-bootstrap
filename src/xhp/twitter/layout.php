<?php

class :twitter:layout extends :ui:base {

  public function render() {
    return
      <div class="container">
        {$this->getChildren()}
      </div>;
  }

}
