---
layout: home
---
# PHP Mess Detector Report

[[toc]]
## Unused Code

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 29 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$overwriteExisting`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 75 | [UnusedLocalVariable](https://phpmd.org/rules/unusedcode.html#unusedlocalvariable) | Avoid unused local variables such as `$sourceFiles`. |

Issues detected: 2
## Code Size

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 19 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class CreateClassCommand has an overall complexity of 54 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Command/CreateEnumCommand.php | 22 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 10. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 25 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 15. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 25 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method __invoke() has an NPath complexity of 1620. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 133 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method setAttribute() has a Cyclomatic Complexity of 14. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 133 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method setAttribute() has an NPath complexity of 324. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Element/Block/Body.php | 57 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The class Body has 52 public methods and attributes. Consider reducing the number of public items to less than 45. |
| <span class="prio3">3</span> | src/Element/Block/Body.php | 57 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Body has 20 fields. Consider redesigning Body to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 34 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The class Input has 74 public methods and attributes. Consider reducing the number of public items to less than 45. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 34 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Input has 28 fields. Consider redesigning Input to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/Element/Inline/Input.php | 34 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class Input has an overall complexity of 50 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Element/Inline/Textarea.php | 34 | [TooManyFields](https://phpmd.org/rules/codesize.html#toomanyfields) | The class Textarea has 16 fields. Consider redesigning Textarea to keep the number of fields under 15. |
| <span class="prio3">3</span> | src/Trait/GlobalAttributesTrait.php | 19 | [ExcessivePublicCount](https://phpmd.org/rules/codesize.html#excessivepubliccount) | The trait GlobalAttributesTrait has 48 public methods and attributes. Consider reducing the number of public items to less than 45. |

Issues detected: 13
## Clean Code

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 75 | [UndefinedVariable](https://phpmd.org/rules/cleancode.html#undefinedvariable) | Avoid using undefined variables such as `$sourceFiles` which will lead to PHP notices. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 34 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 237 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method getMethods uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 347 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method getAttributeComment uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 409 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `getClassName`. |
| <span class="prio1">1</span> | src/Command/CreateEnumCommand.php | 32 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateJsonCommand.php | 31 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 63 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __invoke uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 82 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 96 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 101 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 131 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `isValidYaml`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 116 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createEmpty`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 121 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromString`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 126 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromFile`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 91 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 107 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __set uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 119 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 149 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 158 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
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

Issues detected: 34
## Design

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio2">2</span> | src/Element/BlockElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class BlockElement has 60 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio2">2</span> | src/Element/InlineElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class InlineElement has 38 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 37 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 42 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 65 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 73 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 98 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |

Issues detected: 7

Sat Mar 15 02:08:00 AM CET 2025
