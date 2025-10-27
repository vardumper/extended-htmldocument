---
layout: home
---
# PHP Mess Detector Report

[[toc]]
## Unused Code

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/BatchGeneratorCommand.php | 70 | [UnusedLocalVariable](https://phpmd.org/rules/unusedcode.html#unusedlocalvariable) | Avoid unused local variables such as `$elementShortName`. |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 321 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$type`. |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 354 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$attribute`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 34 | [UnusedPrivateField](https://phpmd.org/rules/unusedcode.html#unusedprivatefield) | Avoid unused private fields such as `$data`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 199 | [UnusedPrivateMethod](https://phpmd.org/rules/unusedcode.html#unusedprivatemethod) | Avoid unused private methods such as `parseFile`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 199 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$generator`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 199 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$sourceFile`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 199 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$dest`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 199 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$io`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 204 | [UnusedPrivateMethod](https://phpmd.org/rules/unusedcode.html#unusedprivatemethod) | Avoid unused private methods such as `formatHtml`. |
| <span class="prio3">3</span> | src/Service/ComponentBuilder.php | 50 | [UnusedLocalVariable](https://phpmd.org/rules/unusedcode.html#unusedlocalvariable) | Avoid unused local variables such as `$childElement`. |

Issues detected: 11
## Code Size

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/BatchGeneratorCommand.php | 33 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 10. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 22 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class CreateClassCommand has an overall complexity of 81 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Command/CreateEnumCommand.php | 28 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 16. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/CreateEnumCommand.php | 28 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method __invoke() has an NPath complexity of 472. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 50 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 14. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 50 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method __invoke() has an NPath complexity of 768. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 35 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class HTMLElementDelegator has an overall complexity of 51 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 175 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method setAttribute() has a Cyclomatic Complexity of 14. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 175 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method setAttribute() has an NPath complexity of 324. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Element/Block/Body.php | 100 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The class Body has 52 public methods and attributes. Consider reducing the number of public items to less than 45. |
| <span class="prio3">3</span> | src/Element/Block/Body.php | 100 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Body has 20 fields. Consider redesigning Body to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 37 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The class Input has 76 public methods and attributes. Consider reducing the number of public items to less than 45. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 37 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Input has 28 fields. Consider redesigning Input to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 37 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class Input has an overall complexity of 50 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Element/Inline/Textarea.php | 37 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Textarea has 16 fields. Consider redesigning Textarea to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/TemplateGenerator/TwigGenerator.php | 95 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method renderElement() has a Cyclomatic Complexity of 27. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/TemplateGenerator/TwigGenerator.php | 95 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method renderElement() has an NPath complexity of 78144. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Trait/ClassResolverTrait.php | 69 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method getElementByQualifiedName() has a Cyclomatic Complexity of 12. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Trait/GlobalAttributesTrait.php | 19 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The trait GlobalAttributesTrait has 48 public methods and attributes. Consider reducing the number of public items to less than 45. |

Issues detected: 19
## Clean Code

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio1">1</span> | src/Command/BatchGeneratorCommand.php | 38 | [BooleanArgumentFlag](https://phpmd.org/rules/cleancode.html#booleanargumentflag) | The method __invoke has a boolean flag argument $overwriteExisting, which is a certain sign of a Single Responsibility Principle violation. |
| <span class="prio1">1</span> | src/Command/BatchGeneratorCommand.php | 44 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __invoke uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/BatchGeneratorCommand.php | 59 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Delegator\HTMLDocumentDelegator` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 100 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `loadHtmlDefinitions`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 109 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `loadHtmlDefinitions`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 439 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method processEnumAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 498 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `getClassName`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 524 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method getAttributeComment uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateEnumCommand.php | 39 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateEnumCommand.php | 40 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __invoke uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateEnumCommand.php | 48 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateJsonCommand.php | 47 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 54 | [BooleanArgumentFlag](https://phpmd.org/rules/cleancode.html#booleanargumentflag) | The method __invoke has a boolean flag argument $overwriteExisting, which is a certain sign of a Single Responsibility Principle violation. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 62 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __invoke uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 112 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 116 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 121 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 169 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Delegator\HTMLDocumentDelegator` in method `processSingleFile`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 204 | [ErrorControlOperator](http://phpmd.org/rules/cleancode.html#errorcontroloperator) | Remove error control operator `@` on line 210. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 218 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method createDirectory uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 87 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createEmpty`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 92 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromString`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 97 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromFile`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 73 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 89 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __set uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 101 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 191 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 200 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 134 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 134 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `134`, column `80`). |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 174 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\PreloadEnum` in method `setPreload`. |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 174 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `174`, column `68`). |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 187 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 187 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `187`, column `83`). |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 203 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\EnctypeEnum` in method `setEnctype`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 203 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `203`, column `68`). |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 219 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\MethodEnum` in method `setMethod`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 219 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `219`, column `65`). |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 259 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 259 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `259`, column `65`). |
| <span class="prio1">1</span> | src/Element/Block/HorizontalRule.php | 97 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AlignEnum` in method `setAlign`. |
| <span class="prio1">1</span> | src/Element/Block/HorizontalRule.php | 97 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `97`, column `62`). |
| <span class="prio1">1</span> | src/Element/Block/InlineFrame.php | 157 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Block/InlineFrame.php | 157 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `157`, column `89`). |
| <span class="prio1">1</span> | src/Element/Block/OrderedList.php | 130 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeOlEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Block/OrderedList.php | 130 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `130`, column `61`). |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 110 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AlignEnum` in method `setAlign`. |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 110 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `110`, column `62`). |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 162 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ValignEnum` in method `setValign`. |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 162 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `162`, column `65`). |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 143 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 143 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `143`, column `80`). |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 207 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\PreloadEnum` in method `setPreload`. |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 207 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `207`, column `68`). |
| <span class="prio1">1</span> | src/Element/Inline/Anchor.php | 162 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Inline/Anchor.php | 162 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `162`, column `56`). |
| <span class="prio1">1</span> | src/Element/Inline/Anchor.php | 179 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Inline/Button.php | 145 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeButtonEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Inline/Button.php | 145 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `145`, column `65`). |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 143 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 143 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `143`, column `80`). |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 159 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\DecodingEnum` in method `setDecoding`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 159 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `159`, column `71`). |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 199 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 199 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `199`, column `89`). |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 197 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 197 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `197`, column `83`). |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 429 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeInputEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 429 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `429`, column `64`). |
| <span class="prio1">1</span> | src/Element/Inline/Select.php | 118 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Select.php | 118 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `118`, column `83`). |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 137 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 137 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `137`, column `83`). |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 273 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\WrapEnum` in method `setWrap`. |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 273 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `273`, column `59`). |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 187 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 187 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `187`, column `56`). |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 203 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ShapeEnum` in method `setShape`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 203 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `203`, column `62`). |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 219 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 219 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `219`, column `65`). |
| <span class="prio1">1</span> | src/Element/Void/Base.php | 90 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Void/Base.php | 90 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `90`, column `65`). |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 97 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 97 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `97`, column `80`). |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 161 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 161 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `161`, column `89`). |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 177 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 177 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `177`, column `56`). |
| <span class="prio1">1</span> | src/Element/Void/Meta.php | 103 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\HttpEquivEnum` in method `setHttpEquiv`. |
| <span class="prio1">1</span> | src/Element/Void/Meta.php | 103 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `103`, column `74`). |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 128 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 128 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `128`, column `80`). |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 180 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 180 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `180`, column `89`). |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 208 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeScriptEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 208 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `208`, column `65`). |
| <span class="prio1">1</span> | src/Element/Void/Style.php | 128 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeStyleEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Void/Style.php | 128 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `128`, column `64`). |
| <span class="prio1">1</span> | src/Element/Void/Track.php | 113 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\KindEnum` in method `setKind`. |
| <span class="prio1">1</span> | src/Element/Void/Track.php | 113 | [MissingImport](http://phpmd.org/rules/cleancode.html#MissingImport) | Missing class import via use statement (line `113`, column `59`). |
| <span class="prio1">1</span> | src/Service/ComponentBuilder.php | 54 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method buildDOM uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Service/ComponentBuilder.php | 63 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method buildDOM uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/TemplateGenerator/TwigGenerator.php | 144 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `renderElement`. |
| <span class="prio1">1</span> | src/TemplateGenerator/TwigGenerator.php | 178 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method renderElement uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 189 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutoCapitalizeEnum` in method `setAutoCapitalize`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 209 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ContentEditableEnum` in method `setContentEditable`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 216 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ContentEditableEnum` in method `setContentEditable`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 218 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ContentEditableEnum` in method `setContentEditable`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 258 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\DirectionEnum` in method `setDir`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 262 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\DirectionEnum` in method `setDir`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 263 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\DirectionEnum` in method `setDir`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 275 | [BooleanArgumentFlag](https://phpmd.org/rules/cleancode.html#booleanargumentflag) | The method setDraggable has a boolean flag argument $draggable, which is a certain sign of a Single Responsibility Principle violation. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 294 | [BooleanArgumentFlag](https://phpmd.org/rules/cleancode.html#booleanargumentflag) | The method setHidden has a boolean flag argument $hidden, which is a certain sign of a Single Responsibility Principle violation. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 326 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\InputModeEnum` in method `setInputMode`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 329 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\InputModeEnum` in method `setInputMode`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 453 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\SpellCheckEnum` in method `setSpellCheck`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 456 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\SpellCheckEnum` in method `setSpellCheck`. |
| <span class="prio1">1</span> | src/Trait/GlobalAttributesTrait.php | 459 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\SpellCheckEnum` in method `setSpellCheck`. |

Issues detected: 119
## Design

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio2">2</span> | src/Delegator/HTMLElementDelegator.php | 35 | [CouplingBetweenObjects](https://phpmd.org/rules/design.html#couplingbetweenobjects) | The class HTMLElementDelegator has a coupling between objects value of 15. Consider to reduce the number of dependencies under 13. |
| <span class="prio2">2</span> | src/Element/BlockElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class BlockElement has 60 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio2">2</span> | src/Element/InlineElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class InlineElement has 39 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 68 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 118 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 161 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method processSingleFile() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 193 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method processSingleFile() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 220 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method createDirectory() contains an exit expression. |

Issues detected: 8

Tue Oct 28 12:27:38 AM CET 2025
