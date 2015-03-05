<block>
	<brand>
    	<bsin><?=$VALUE_BSIN?></bsin>
    	<name><?=$VALUE_BRAND_NM?></name>
        <type><?=$VALUE_BRAND_TYPE_NM?></type>
        <image><?=$VALUE_BRAND_IMG?></image>
        <link><?=$VALUE_BRAND_LINK?></link>
        <owner>
        	<code><?=$VALUE_OWNER_CD?></code>
            <name><?=$VALUE_OWNER_NM?></name>
        </owner>
    </brand>
<!--COUPER_ICI-->
    <item>
        <gtin><?=$VALUE_GTIN_CD?></gtin>
        <gcp><?=$VALUE_GCP_CD?></gcp>
        <gpc>
			<image><?=$VALUE_GPC_S_IMG?></image>
            <name><?=$VALUE_GPC_S_NM?></name>
        </gpc>
        <name><?=$VALUE_GTIN_NM?></name>
    	<brand><?=$VALUE_BRAND_NM?></brand>
        <productLine><?=$VALUE_PL_NM?></productLine>
        <gpc><?=$VALUE_GCP_CD?></gpc>
        <registration>
        	<country><?=$VALUE_REG_C?></country>
            <office><?=$VALUE_REG_N?></office>
        </registration>
        <measure>
           <ml><?=$VALUE_M_ML?></ml>
           <floz><?=$VALUE_M_FLOZ?></floz>
           <g><?=$VALUE_M_G?></g>
           <oz><?=$VALUE_M_OZ?></oz>
           <abv><?=$VALUE_M_ABV?></abv>
           <abw><?=$VALUE_M_ABW?></abw>
        </measure>
        <packaging>
           <description><?=$VALUE_PKG_NM?></description>
           <internalUnit><?=$VALUE_PKG_UNIT?></internalUnit>
        </packaging>
        <description><?=$VALUE_GTIN_DESC?></description>
        <link><?=$VALUE_GTIN_LNK?></link>
        <image><?=$VALUE_GTIN_IMG?></image>
        <nutri_flag><?=$VALUE_NUTRI_FLAG?></nutri_flag>
    </item>
<!--COUPER_ICI-->
</block>



