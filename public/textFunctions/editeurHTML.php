<!-- Un éditeur de texte pour modifier ou ajouter un épisode coté modérateur -->

<input type="button" value="G" style="font-weight: bold;" onclick="commande('bold');" />
<input type="button" value="I" style="font-style: italic;" onclick="commande('italic');" />
<input type="button" value="S" style="text-decoration: underline;" onclick="commande('underline');" />
<input type="button" value="Lien" onclick="commande('createLink');" />
<input type="button" value="Image" onclick="commande('insertImage');" />
<select onchange="commande('heading', this.value); this.selectedIndex = 0;">
  <option value="">Titre</option>
  <option value="h1">Titre 1</option>
  <option value="h2">Titre 2</option>
  <option value="h3">Titre 3</option>
  <option value="h4">Titre 4</option>
  <option value="h5">Titre 5</option>
  <option value="h6">Titre 6</option>
</select>
