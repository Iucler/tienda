  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header bg-success text-white">
                  <h5 class="modal-title"><i class="fas fa-cart-arrow-down"> </i>Carrito</h5>
                  <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
              </div>
              <div class="modal-body">
                  <div class="table-responsibe">
                      <table class="table table-border table-striped table-hover align-middle" id="tableListaCarrito">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Producto</th>
                                  <th>Precio</th>
                                  <th>Cantidad</th>
                                  <th>Subtotal</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="d-flex justify-content-around mb-3">
                  <h3 id="totalGeneral"></h3>
                  <?php if (!empty($_SESSION['correoCliente'])) { ?>
                      <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar Pedido</a>
                  <?php } else { ?>
                      <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Login</a>
                  <?php } ?>
              </div>

          </div>
      </div>
  </div>

  <!--Login directo-->
  <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header bg-success text-white">
                  <h5 class="modal-title" id="titleLogin">Iniciar sesion</h5>
                  <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
              </div>
              <div class="modal-body m-3">
                  <form method="post" action="">
                      <div class="text-center"><img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/favicon.ico'; ?>" alt="" width="100px"></div>
                      <div class="orw">
                          <div class="col-md-12" id="formLogin">
                              <div class="form-group mb-3">
                                  <label for="correoLogin"><i class="fas fa-envelope"></i>Correo</label>
                                  <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo electronico">
                              </div>
                              <div class="form-group mb-3">
                                  <label for="claveLogin"><i class="fas fa-key"></i>Contrasena</label>
                                  <input id="claveLogin" class="form-control" type="text" name="claveLogin" placeholder="Contrasena">
                              </div>

                              <a href="#" id="btnRegister">Todavia no tienes una cuenta?</a>
                              <div class="float-end">
                                  <button class="btn btn-primary btn-lg" type="button" id="login">Login</button>
                              </div>
                          </div>
                          <!-- Formulario de registr-->
                          <div class="col-md-12 d-none" id="formRegister">
                              <div class="form-group mb-3 ">
                                  <label for="nombreRegister"><i class="fas fa-list"></i>Nombre</label>
                                  <input id="nombreRegister" class="form-control" type="text" name="nombreRegister" placeholder="Nombre completo">
                              </div>
                              <div class="form-group mb-3">
                                  <label for="correoRegistro"><i class="fas fa-envelope"></i>Correo</label>
                                  <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo electronico">
                              </div>
                              <div class="form-group mb-3">
                                  <label for="claveRegistro"><i class="fas fa-key"></i>Contrasena</label>
                                  <input id="claveRegistro" class="form-control" type="text" name="claveRegistro" placeholder="Contrasena">
                              </div>
                              <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
                              <div class="float-end">
                                  <button class="btn btn-primary btn-lg" type="button" id="registrarse">Register</button>
                              </div>
                          </div>
                      </div>

                  </form>
              </div>


          </div>
      </div>
  </div>
  <!-- Start Footer -->
  <footer class="bg-dark" id="tempaltemo_footer">
      <div class="container">
          <div class="row">

              <div class="col-md-4 pt-5">
                  <h2 class="h2 text-success border-bottom pb-3 border-light logo"><?php echo TITLE . ' - ' . $data['title']; ?></h2>
                  <ul class="list-unstyled text-light footer-link-list">
                      <li>
                          <i class="fas fa-map-marker-alt fa-fw"></i>
                          123 Consectetur at ligula 10660
                      </li>
                      <li>
                          <i class="fa fa-phone fa-fw"></i>
                          <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                      </li>
                      <li>
                          <i class="fa fa-envelope fa-fw"></i>
                          <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-4 pt-5">
                  <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                  <ul class="list-unstyled text-light footer-link-list">
                      <li><a class="text-decoration-none" href="#">Luxury</a></li>
                      <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                      <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                      <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                      <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                      <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                      <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                  </ul>
              </div>

              <div class="col-md-4 pt-5">
                  <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                  <ul class="list-unstyled text-light footer-link-list">
                      <li><a class="text-decoration-none" href="#">Home</a></li>
                      <li><a class="text-decoration-none" href="#">About Us</a></li>
                      <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                      <li><a class="text-decoration-none" href="#">FAQs</a></li>
                      <li><a class="text-decoration-none" href="#">Contact</a></li>
                  </ul>
              </div>

          </div>

          <div class="row text-light mb-4">
              <div class="col-12 mb-3">
                  <div class="w-100 my-3 border-top border-light"></div>
              </div>
              <div class="col-auto me-auto">
                  <ul class="list-inline text-left footer-icons">
                      <li class="list-inline-item border border-light rounded-circle text-center">
                          <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                      </li>
                      <li class="list-inline-item border border-light rounded-circle text-center">
                          <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                      </li>
                      <li class="list-inline-item border border-light rounded-circle text-center">
                          <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                      </li>
                      <li class="list-inline-item border border-light rounded-circle text-center">
                          <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                      </li>
                  </ul>
              </div>
              <div class="col-auto">
                  <label class="sr-only" for="subscribeEmail">Email address</label>
                  <div class="input-group mb-2">
                      <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                      <div class="input-group-text btn-success text-light">Subscribe</div>
                  </div>
              </div>
          </div>
      </div>

      <div class="w-100 bg-black py-3">
          <div class="container">
              <div class="row pt-2">
                  <div class="col-12">
                      <p class="text-left text-light">
                          Copyright &copy; 2021 Company Name
                          | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                      </p>
                  </div>
              </div>
          </div>
      </div>

  </footer>
  <!-- End Footer -->

  <!-- Start Script -->
  <script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.0.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
  <script>
      const base_url = '<?php echo BASE_URL; ?>';
  </script>
  <script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
  <!-- End Script -->