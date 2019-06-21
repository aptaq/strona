<!DOCTYPE html>
<html lang="pl">
  <head>
   <meta charset="utf-8">
   <title>Struktura strony za pomocą znaków semantycznych</title>
   <link rel="stylesheet" href="style.css" type ="text/css"/>
   <body>
      <nav>
        <ul>
          <li>Opcja</li>
          <li>
            <!-- target okresla ktore linki mają taki kolor, przy divie sie rozjezdzały troche -->
              <a href="logowanie.php" target="_blank">Zaloguj się
              </a>
           </li>
           <li>
               <a href="rejestracja.html" target="_blank">Zarejestruj się
               </a>
            </li>
        </ul>
      </nav>
      <div id="container">
        <header>
          <h1>HEADER: Typical test site</h1>
        </header>
        <div class="wrapper">
          <aside>
            <h2>ASIDE</h2>
            <ul>
              <li>links</li>
              (...)
            </ul>
          </aside>
          <main>
            <h2>MAIN</h2>
            <section>
              <h2>SECTION</h2>
              <article>
                <h3>ARTICLE: Lorem ipsum</h3>
                <p>(...)</p>
                <p><a href="article.html">read more...</a></p>
              </article>
              <article>
                <h3>ARTICLE: Lorem ipsum</h3>
                <p>(...)</p>
                <p><a href="article.html">read more...</a></p>
              </article>
            </section>
          </main>
        </div>
        <footer class="clear">
          <h3>Typical test site</h3>
        </footer>
      </div>
  </body>
