<?/*
   This file was generated by ccHost Content Manager

[meta]
     type = dynamic_content_page
     desc = _('Crate & Barrel')
     page_title = _('Crate & Barrel')
      content_feed = 0
      content_page_box = 1
      content_page_columns = 2
      content_page_textformat = format
      content_page_width = 
      content_toc = 0
      limit = 
      ord = desc
      paging = on
      show_bread_crumbs = 1
      sort = date
      t = ccskins/shared/pages/content_page.tpl
      topic_type = crateBarel
      breadcrumbs = home,page_title,topic

[/meta]
*/
$A['content_page_box'] = '1';
$A['content_page_width'] = '';
$A['content_page_textformat'] = 'format';
$A['content_page_columns'] = '2';

$topic = empty($_GET['topic']) ? '' : $_GET['topic'];
cc_query_fmt('f=embed&t=ccskins/shared/pages/content_page.tpl&sort=date&ord=desc&type=crateBarel&limit=&paging=on&topic=' . $topic );
cc_add_content_paging_links($A,'crateBarel',$topic,'desc','crate-barrel', '');
$A['macro_names'][] = 'prev_next_links';
//  
?>

