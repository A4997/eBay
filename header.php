<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php"><img src="img/apple-logo.png" style="width: 50px;"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto ">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item dropdown" >
    <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Customers
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="new_customer.php">New Customer</a>
      <a class="dropdown-item" href="customers.php">Customers List</a>
      <a class="dropdown-item" href="search_by_name.php">Search by name</a>
      <a class="dropdown-item" href="search_by_phone.php">Search by Phone</a>
      <a class="dropdown-item" href="search_dynamic.php">Search Dynamic</a>
      <a class="dropdown-item" href="search_by_field.php">Search by Field</a>
    </div>
  </li>
  <li class="nav-item dropdown" >
    <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Products
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="add_product.php">New Customer</a>
      <a class="dropdown-item" href="product_list.php">Customers List</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="product_search_by_name.php">Search by name</a>
      <a class="dropdown-item" href="product_search_by_phone.php">Search by Phone</a>
      <a class="dropdown-item" href="product_search_dynamic.php">Search Dynamic</a>
      <a class="dropdown-item" href="product_search_by_field.php">Search by Field</a>
    </div>
    <li class="nav-item" style="float:left">
           <a class="nav-link" href="usignout.php">Sign-out</a>
         </li>
</ul>
</div>
</nav>
