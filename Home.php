if($this->uri->segment(3)){
$page = ($this->uri->segment(3)) ;
}
else{
$page = 0;
}

$page = max(0, ( $page -1 ) * $config["per_page"]);

$data["rs"] = $this->pagination_model->fetch_data($config["per_page"], $page);
