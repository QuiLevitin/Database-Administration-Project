








--REQUIREMENT:
	--Display InvoiceNumber, OrderDate, DueDate from saletotal of the dealer's invoice/s.

--SQL CODE:
	SELECT  InvoiceNumber, OrderDate, DueDate  
	FROM salesinfo 
	WHERE DealerCode = 'DF5387';



--REQUIREMENT:
	--Display InvoiceNumber, QuantityTotal, GrossAmountTotal, DiscountTotal, NetAmountTotal, FactoredAmountTotal from saletotal of the dealer's invoice/s.

--SQL CODE:
	SELECT  saleTotal.InvoiceNumber, saleTotal.QuantityTotal, saleTotal.GrossAmountTotal, saleTotal.DiscountTotal, saleTotal.NetAmountTotal, saleTotal.FactoredAmountTotal  
	FROM saletotal, salesinfo
	WHERE saletotal.InvoiceNumber = salesinfo.InvoiceNumber AND salesinfo.DealerCode = 'DF5387';




