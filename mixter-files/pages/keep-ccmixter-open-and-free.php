<?/*
   This file was generated by ccHost Content Manager

[meta]
     type = dynamic_content_page
     desc = _('Keep ccMixter Open and Free')
     page_title = _('Keep ccMixter Open and Free')
      content_feed = 0
      content_page_box = 0
      content_page_columns = 1
      content_page_textformat = format
      content_page_width = 900px
      content_toc = 0
      limit = 
      ord = desc
      paging = on
      show_bread_crumbs = 0
      sort = date
      t = ccskins/shared/pages/content_page.tpl
      topic_type = Keep ccMixter Open and Free

[/meta]
*/
$A['content_page_box'] = '0';
$A['content_page_width'] = '900px';
$A['content_page_textformat'] = 'format';
$A['content_page_columns'] = '1';

$topic = empty($_GET['topic']) ? '' : $_GET['topic'];
cc_query_fmt('f=embed&t=ccskins/shared/pages/content_page.tpl&sort=date&ord=desc&type=Keep ccMixter Open and Free&limit=&paging=on&topic=' . $topic );
cc_add_content_paging_links($A,'Keep ccMixter Open and Free',$topic,'desc','keep-ccmixter-open-and-free', '');
$A['macro_names'][] = 'prev_next_links';
//  
?>

