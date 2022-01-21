<?php
namespace MailPoetVendor\Twig\TokenParser;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Node\WithNode;
use MailPoetVendor\Twig\Token;
final class WithTokenParser extends AbstractTokenParser
{
 public function parse(Token $token)
 {
 $stream = $this->parser->getStream();
 $variables = null;
 $only = \false;
 if (!$stream->test(
 3
 )) {
 $variables = $this->parser->getExpressionParser()->parseExpression();
 $only = (bool) $stream->nextIf(
 5,
 'only'
 );
 }
 $stream->expect(
 3
 );
 $body = $this->parser->subparse([$this, 'decideWithEnd'], \true);
 $stream->expect(
 3
 );
 return new WithNode($body, $variables, $only, $token->getLine(), $this->getTag());
 }
 public function decideWithEnd(Token $token)
 {
 return $token->test('endwith');
 }
 public function getTag()
 {
 return 'with';
 }
}
\class_alias('MailPoetVendor\\Twig\\TokenParser\\WithTokenParser', 'MailPoetVendor\\Twig_TokenParser_With');
