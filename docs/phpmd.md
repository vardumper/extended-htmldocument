---
layout: home
---
# PHP Mess Detector Report

[[toc]]
## Unused Code

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 182 | [UnusedLocalVariable](https://phpmd.org/rules/unusedcode.html#unusedlocalvariable) | Avoid unused local variables such as `$isEnumType`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 22 | [UnusedPrivateField](https://phpmd.org/rules/unusedcode.html#unusedprivatefield) | Avoid unused private fields such as `$data`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 154 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$dest`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 164 | [UnusedLocalVariable](https://phpmd.org/rules/unusedcode.html#unusedlocalvariable) | Avoid unused local variables such as `$data`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 205 | [UnusedPrivateMethod](https://phpmd.org/rules/unusedcode.html#unusedprivatemethod) | Avoid unused private methods such as `parseFile`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 205 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$generator`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 205 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$sourceFile`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 205 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$dest`. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 205 | [UnusedFormalParameter](https://phpmd.org/rules/unusedcode.html#unusedformalparameter) | Avoid unused parameters such as `$io`. |

Issues detected: 9
## Code Size

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio3">3</span> | src/Command/CreateClassCommand.php | 19 | [ExcessiveClassComplexity](https://phpmd.org/rules/codesize.html#excessiveclasscomplexity) | The class CreateClassCommand has an overall complexity of 57 which is very high. The configured complexity threshold is 50. |
| <span class="prio3">3</span> | src/Command/CreateEnumCommand.php | 22 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 10. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 30 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method __invoke() has a Cyclomatic Complexity of 13. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Command/WatchCommand.php | 30 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method __invoke() has an NPath complexity of 384. The configured NPath complexity threshold is 200. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 146 | [CyclomaticComplexity](https://phpmd.org/rules/codesize.html#cyclomaticcomplexity) | The method setAttribute() has a Cyclomatic Complexity of 14. The configured cyclomatic complexity threshold is 10. |
| <span class="prio3">3</span> | src/Delegator/HTMLElementDelegator.php | 146 | [NPathComplexity](https://phpmd.org/rules/codesize.html#npathcomplexity) | The method setAttribute() has an NPath complexity of 324. The configured NPath complexity threshold is 200. |
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
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 34 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 255 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method getMethods uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 358 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method getAttributeComment uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Command/CreateClassCommand.php | 420 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `getClassName`. |
| <span class="prio1">1</span> | src/Command/CreateEnumCommand.php | 32 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/CreateJsonCommand.php | 31 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Symfony\Component\Yaml\Yaml` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 34 | [BooleanArgumentFlag](https://phpmd.org/rules/cleancode.html#booleanargumentflag) | The method __invoke has a boolean flag argument $overwriteExisting, which is a certain sign of a Single Responsibility Principle violation. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 87 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 91 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 96 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Revolt\EventLoop` in method `__invoke`. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 214 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method createDirectory uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 116 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createEmpty`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 121 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromString`. |
| <span class="prio1">1</span> | src/Delegator/HTMLDocumentDelegator.php | 126 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\DOM\HTMLDocument` in method `createFromFile`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 97 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 113 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method __set uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 125 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Helper\Helper` in method `__set`. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 162 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Delegator/HTMLElementDelegator.php | 171 | [ElseExpression](https://phpmd.org/rules/cleancode.html#elseexpression) | The method setAttribute uses an else expression. Else clauses are basically not necessary and you can simplify the code by not using them. |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 121 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Block/Audio.php | 161 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\PreloadEnum` in method `setPreload`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 165 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 183 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\EnctypeEnum` in method `setEnctype`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 201 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\MethodEnum` in method `setMethod`. |
| <span class="prio1">1</span> | src/Element/Block/Form.php | 239 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Block/HorizontalRule.php | 84 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AlignEnum` in method `setAlign`. |
| <span class="prio1">1</span> | src/Element/Block/InlineFrame.php | 142 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Block/OrderedList.php | 107 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeOlEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 83 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AlignEnum` in method `setAlign`. |
| <span class="prio1">1</span> | src/Element/Block/TableRow.php | 132 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ValignEnum` in method `setValign`. |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 133 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Block/Video.php | 195 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\PreloadEnum` in method `setPreload`. |
| <span class="prio1">1</span> | src/Element/Inline/Anchor.php | 154 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Inline/Anchor.php | 171 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Inline/Button.php | 141 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeButtonEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 150 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 168 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\DecodingEnum` in method `setDecoding`. |
| <span class="prio1">1</span> | src/Element/Inline/Image.php | 208 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 230 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Input.php | 446 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeInputEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Inline/Select.php | 113 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 142 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\AutocompleteEnum` in method `setAutocomplete`. |
| <span class="prio1">1</span> | src/Element/Inline/Textarea.php | 270 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\WrapEnum` in method `setWrap`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 184 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 200 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ShapeEnum` in method `setShape`. |
| <span class="prio1">1</span> | src/Element/Void/Area.php | 216 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Void/Base.php | 80 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TargetEnum` in method `setTarget`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 102 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 164 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Void/Link.php | 182 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\RelEnum` in method `setRel`. |
| <span class="prio1">1</span> | src/Element/Void/Meta.php | 104 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\HttpEquivEnum` in method `setHttpEquiv`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 123 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\CrossoriginEnum` in method `setCrossorigin`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 174 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\ReferrerpolicyEnum` in method `setReferrerpolicy`. |
| <span class="prio1">1</span> | src/Element/Void/Script.php | 203 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeScriptEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Void/Style.php | 122 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\TypeStyleEnum` in method `setType`. |
| <span class="prio1">1</span> | src/Element/Void/Track.php | 111 | [StaticAccess](https://phpmd.org/rules/cleancode.html#staticaccess) | Avoid using static access to class `\Html\Enum\KindEnum` in method `setKind`. |
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

Issues detected: 70
## Design

| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
| <span class="prio2">2</span> | src/Delegator/HTMLElementDelegator.php | 33 | [CouplingBetweenObjects](https://phpmd.org/rules/design.html#couplingbetweenobjects) | The class HTMLElementDelegator has a coupling between objects value of 13. Consider to reduce the number of dependencies under 13. |
| <span class="prio2">2</span> | src/Element/BlockElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class BlockElement has 60 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio2">2</span> | src/Element/InlineElement.php | 7 | [NumberOfChildren](https://phpmd.org/rules/design.html#numberofchildren) | The class InlineElement has 38 children. Consider to rebalance this class hierarchy to keep number of children under 15. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 42 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 93 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method __invoke() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 168 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method processFiles() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 172 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method processFiles() contains an exit expression. |
| <span class="prio1">1</span> | src/Command/WatchCommand.php | 216 | [ExitExpression](https://phpmd.org/rules/design.html#exitexpression) | The method createDirectory() contains an exit expression. |

Issues detected: 8

Fri Mar 21 09:01:07 AM CET 2025
