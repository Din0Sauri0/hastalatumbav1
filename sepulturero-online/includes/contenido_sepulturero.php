<section class="msger">
    <header class="msger-header">
        <div class="msger-header-title">
            <img src="<?php echo $url_index ?><?php echo $imagenes_index ?>logos/logohlt.webp" alt="" title="">

        </div>
    </header>
    <main class="msger-chat">
        <div class="msg left-msg">
            <div class="msg-bubble">
                <div class="msg-info">
                    <h1 style="font-size:40px">El SEPULTURERO responde</h1>
                    <div class="msg-info-time">
                        <!-- 22:26 -->
                    </div>
                </div>
                <div class="msg-text">
                    Soy <i><b>SEPULTURERO</b></i> en <b>hastalatumba.cl</b> y estoy para responder tus dudas<p></p>
                    <ul>
                        <li>Tema 1</li>
                        <li>Tema 2</li>
                        <li>tema 3</li>


                    </ul>

                </div>
            </div>
        </div>

    </main>
    <form class="msger-inputarea">
        <input type="text" id="texto" class="msger-input" placeholder="Haz tu pregunta...">
        <button type="submit" class="msger-send-btn" onclick="guardarTexto()"><i class=" fa fa-paper-plane"
                aria-hidden="true"></i></button>
    </form>
</section>