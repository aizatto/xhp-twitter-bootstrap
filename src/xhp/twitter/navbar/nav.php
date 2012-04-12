<?php

class :twitter:navbar:nav extends :x:element {

  public function render() {
    return
      <div class="nav-collapse">
        <ul class="nav">
          {$this->getChildren()}
        </ul>
      </div>;
  }

}
