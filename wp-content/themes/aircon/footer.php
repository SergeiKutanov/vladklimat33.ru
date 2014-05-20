                <div class="contain-to-grid" id="footer">
                    <div class="row">
                        <div class="small-12 medium-8 columns" id="footer-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'sort_column'       => 'menu_order',
                                'container'         => false,
                                'menu_class'        => 'off-canvas-list',
                                'theme-location'    => 'primary-menu',
                                'container_class'   => 'footer-menu',
                                'walker'            => new Top_Menu_Walker()
                            )
                        );
                        ?>
                        </div>
                        <div class="small-12 medium-4 columns" id="address">
                            <p>
                                Мы находимся по адресу:<br>
                                г. Владимир, ул. Безыменского, д. 17Г<br>
                                Телефон:<br>
                                <a href="tel:89206280088">8(920)628-00-88</a><br>
                                Email:<br>
                                <a href="mailto:pigmalionus@mail.ru">pigmalionus@mail.ru</a><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </body>
</html>