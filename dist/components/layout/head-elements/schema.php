<!-- SoftwareApplication -->
<script type="application/ld+json">
  {
  	"@context": "https://schema.org/",
  	"@type": "SoftwareApplication",
  	"name": "<?= $offer_name ?>",
  	"url": "<?= $currentUrl ?>",
  	"logo": "<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/favicon.ico",
  	"image": "<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/meta/<?= $theme ?>/img.png",
  	"description": <?= json_encode($meta['description']) ?>,
  	"applicationCategory": "FinanceApplication",
  	"operatingSystem": "Web Browser",
  	"aggregateRating": {
  		"@type": "AggregateRating",
  		"ratingValue": <?= t('v.rating') ?>,
  		"bestRating": <?= t('v.score') ?>,
  		"worstRating": <?= t('v.worst') ?>,
  		"ratingCount": <?= t('v.votes') ?>,
  		"reviewCount": <?= t('v.reviews') ?>
  	},
  	"offers": {
  		"@type": "Offer",
  		"price": "<?= t('v.startAmount') ?>",
  		"priceCurrency": "USD",
  		"availability": "https://schema.org/InStock"
  	},
  	"author": {
  		"@type": "Brand",
  		"name": "<?= $offer_name ?>"
  	}
  }
</script>

<!-- Organization -->
<?php if ($pagePathWithoutLang === '') { ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?= $offer_name ?>",
    "url": "<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>",
    "logo": "<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>/assets/img/favicon.ico",
    "description": "<?= $meta['description'] ?>",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "email": "<?= getEmail() ?>"
    }
  }
</script>
<?php } ?>

<!-- WebSite -->
<?php if ($pagePathWithoutLang === '') { ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "<?= $offer_name ?>",
    "url": "<?= $protocolType ?>://<?= $_SERVER['HTTP_HOST'] ?>",
    "description": "<?= $meta['description'] ?>",
    "inLanguage": "<?= $language ?>"
  }
</script>
<?php } ?>

<!-- BreadcrumbList -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": <?= json_encode(t('t.main.menu_home')) ?>,
        "item": <?= json_encode($protocolType . '://' . $_SERVER['HTTP_HOST'] . url()) ?>
      }
      <?php if ($pagePathWithoutLang !== '') { ?>,
      {
        "@type": "ListItem",
        "position": 2,
        "name": <?= json_encode($currentPageLabel) ?>,
        "item": <?= json_encode($protocolType . '://' . $_SERVER['HTTP_HOST'] . url($pagePathWithoutLang)) ?>
      }
      <?php } ?>
    ]
  }
</script>

<!-- FAQPage -->
<?php if ($pagePathWithoutLang === '') { ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": <?= json_encode(t('t.index.faq_item_title_1')) ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?= json_encode(t('t.index.faq_item_text_1')) ?>
        }
      },
      {
        "@type": "Question",
        "name": <?= json_encode(t('t.index.faq_item_title_2')) ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?= json_encode(t('t.index.faq_item_text_2')) ?>
        }
      },
      {
        "@type": "Question",
        "name": <?= json_encode(t('t.index.faq_item_title_3')) ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?= json_encode(t('t.index.faq_item_text_3')) ?>
        }
      },
      {
        "@type": "Question",
        "name": <?= json_encode(t('t.index.faq_item_title_4')) ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?= json_encode(t('t.index.faq_item_text_4')) ?>
        }
      },
      {
        "@type": "Question",
        "name": <?= json_encode(t('t.index.faq_item_title_5')) ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?= json_encode(t('t.index.faq_item_text_5')) ?>
        }
      }
    ]
  }
</script>
<?php } ?>
