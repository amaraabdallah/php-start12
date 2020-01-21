<?php
function get_posts(): ?Array {
  // Get the contents of the JSON file 
  $strJsonFileContents = file_get_contents(__DIR__ . "/data/posts.json");

  return json_decode($strJsonFileContents, true);
}

function get_post(int $index): ?Array {
  $posts = get_posts();
  if(!empty($posts) && count($posts) > $index && $index > -1){
    return $posts[$index];
  }

  return null;
}
function create_post(string $title, string $content): void {
  
  // On récupère tous nos posts dans un tableau
  $posts = get_posts();

  // On va créer un nouveau post...
  $post = [
    "title"=>$title,
    "body"=>$content
  ];

  // ... puis l'ajouter au tableau $posts (array_push)
  array_push ($posts, $post);

  // On retransforme le tableau $posts en JSON (json_encode)
  $json = json_encode($posts);

  // On enregistre le fichier avec le nouveau contenu JSON (file_put_contents)
  file_put_contents(__DIR__ . "/data/posts.json", $json);

}