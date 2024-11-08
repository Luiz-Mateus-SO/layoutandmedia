<?php $contato = get_page_by_title('contato'); ?>

<section class="orcamento">
  <div class="container">
    <h2 class="subtitulo">Orçamento</h2>
    <form action="<?php echo get_template_directory_uri(); ?>enviar.php" method="post" name="form" class="formphp form grid-8">
      <label for="nome">Nome</label>
      <input id="nome" name="nome" type="text">
      <label for="email">E-mail</label>
      <input id="email" name="email" type="text">
      <label for="telefone">Telefone</label>
      <input id="telefone" name="telefone" type="text">

      <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
      <input type="text" class="nao-aparece" name="leaveblank">
      <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
      <input type="text" class="nao-aparece" name="dontchange" value="http://" >

      <label for="mensagem">Especificações</label>
      <textarea name="mensagem" id="mensagem"></textarea>

      <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
    </form>
    <div class="orcamento_dados grid-8">
      <h3>Dados</h3>
      <span><?php the_field('telefone', $contato); ?></span>
      <span><?php the_field('email', $contato); ?></span>
      <h3><?php the_field('orcamento_titulo', $contato); ?></h3>
      <p><?php the_field('orcamento_descricao', $contato); ?></p>
      <?php if ( have_rows('orcamento_itens', $contato) ) : ?>
      <ul>
        <?php while ( have_rows('orcamento_itens', $contato) ) : the_row(); ?>
          <li><?php the_sub_field('especificacao', $contato); ?></li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    </div>
  </div> 
</section>