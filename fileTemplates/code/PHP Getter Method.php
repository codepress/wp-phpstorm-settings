/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${GET_OR_IS}_${FIELD_NAME}()#if(${RETURN_TYPE}): ${RETURN_TYPE}#else#end
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
