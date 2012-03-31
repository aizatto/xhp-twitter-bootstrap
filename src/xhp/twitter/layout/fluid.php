<?php

class :twitter:layout:fluid extends :ui:base {

  public function render() {
    return
      <div class="container-fluid">
        <div class="row-fluid">
          {$this->getChildren()}
        </div>
      </div>;
  }

}

