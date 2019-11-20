#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
  tx_ukrainianpackage_terms int(11) DEFAULT '0' NOT NULL,
  tt_contentfeuser_user varchar(100) DEFAULT '0' NOT NULL,
  tx_news_related_news_answer int(11) DEFAULT '0' NOT NULL,
  KEY index_newscontentanswer (tx_news_related_news_answer)
);
#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
  content_elements_answer int(11) DEFAULT '0' NOT NULL
);
