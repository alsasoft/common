<?php
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCode', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getType', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCategoryCode', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getShares', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getSharesToSell', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getSharesSoldExternally', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getSharePrice', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isStorefront', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getChannel', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isHighlights', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isAutoActivable', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getItemCount', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isMultiDrawAlowed', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getPayback', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getGuarantedCat', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCurrency', 'string');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isAutoCancelable', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getTotalCoef', 'double');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getBreakEvenCoef', 'double');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isFixedPlayDate', 'boolean');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getBuyingTime', 'integer');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCancelTime', 'integer');
/*
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getDiscountCoeficients', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getDrawDiscounts', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getPromo', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getPromos', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getWhatWePlayQuestion', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getWhatWePlay', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getHowWeChoseQuestion', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getHowWeChose', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLinesPlayed', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCombinationsOf', 'normal');

	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getBuyingCost', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getBuyingCostSum', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getItemType', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getNominalAbsolute', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getMarginAbsolute', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getMarginRelative', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCategory', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCombinations', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCombinationsCount', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLotteryDestribution', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLotteryDrawsIds', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getFirstCombination', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLastCombination', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCancellationCustomTexts', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'isCustomSystem', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCustomSystemLevel', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLotteryCodes', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCustomSystemRestrictionsTexts', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCustomSystemUser', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCustomSystemPetition', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getInitialQuantity', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getBeginDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculateMinimumDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculateLastPlayDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculateNextPlayDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculateNextCancellationDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculateNextClockDate', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculatePrizeQuantity', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'calculatePrizeQuantities', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getLotteries', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getRecomendedCode', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getCustomSystemDisplayLevel', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getRecomendedNames', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getRecomendedDescriptions', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getRecomendedDescriptionsMoreInfo', 'normal');
	self::debugMethod($variable, $name, $deep, $directory, $visited, 'getUniqueLottery', 'normal');
*/
