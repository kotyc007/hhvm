<?php
<<__EntryPoint>> function main() {
var_dump(parse_url("http://example.com:80#@google.com/"));
var_dump(parse_url("http://example.com:80?@google.com/"));
}
