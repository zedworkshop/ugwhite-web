<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Navigation Label
    type:  text
  metatitle:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
    header1: h3
    header2: h4