{foreach from=$summaries item=summary}
	{$summary|truncate:35:"..."}<br />
{/foreach}