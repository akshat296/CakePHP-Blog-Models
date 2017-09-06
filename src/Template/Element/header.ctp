
<ul>
  <li><a class="add" href="#">Home</a></li>
  <li><?= "<a class='add' href = '".$this->Url->build(["controller" => "Categories","action"=>"index"])."'>Category</a>" ?></li>
  <li><?= "<a class='add' href = '".$this->Url->build(["controller" => "Enquiries","action"=>"contactUs"])."'>Contact Us</a>" ?></li>
  <li><a class="add" href="#">About</a></li>
</ul>