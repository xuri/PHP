{section name=book loop=$titles}
	<p>Title: {$titles[book].title}<br />
	Author: {$titles[book].author}<br />
	Published: {$titles[book].published}</p>
{/section}