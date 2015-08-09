<?php if(!defined('KIRBY')) exit ?>

title: Note
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
    required: true
  date:
    label: Date
    type: date
    width: 1/2
    default: today
  author:
    label: Author
    type: user
    width: 1/2
  text:
    label: Text
    type: markdown