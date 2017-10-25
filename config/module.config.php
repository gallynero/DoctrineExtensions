<?php
namespace DoctrineExtensions;

use DoctrineExtensions\Query\Mysql\ConvertTz;
use DoctrineExtensions\Query\Mysql\Curdate;
use DoctrineExtensions\Query\Mysql\Date;
use DoctrineExtensions\Query\Mysql\DateAdd;
use DoctrineExtensions\Query\Mysql\DateDiff;
use DoctrineExtensions\Query\Mysql\DateFormat;
use DoctrineExtensions\Query\Mysql\DateSub;
use DoctrineExtensions\Query\Mysql\Day;
use DoctrineExtensions\Query\Mysql\DayName;
use DoctrineExtensions\Query\Mysql\DayOfWeek;
use DoctrineExtensions\Query\Mysql\DayOfYear;
use DoctrineExtensions\Query\Mysql\Div;
use DoctrineExtensions\Query\Mysql\Extract;
use DoctrineExtensions\Query\Mysql\FromUnixtime;
use DoctrineExtensions\Query\Mysql\Hour;
use DoctrineExtensions\Query\Mysql\LastDay;
use DoctrineExtensions\Query\Mysql\Minute;
use DoctrineExtensions\Query\Mysql\Month;
use DoctrineExtensions\Query\Mysql\MonthName;
use DoctrineExtensions\Query\Mysql\Now;
use DoctrineExtensions\Query\Mysql\PeriodDiff;
use DoctrineExtensions\Query\Mysql\Second;
use DoctrineExtensions\Query\Mysql\SecToTime;
use DoctrineExtensions\Query\Mysql\StrToDate;
use DoctrineExtensions\Query\Mysql\Time;
use DoctrineExtensions\Query\Mysql\TimeDiff;
use DoctrineExtensions\Query\Mysql\TimestampAdd;
use DoctrineExtensions\Query\Mysql\TimestampDiff;
use DoctrineExtensions\Query\Mysql\TimeToSec;
use DoctrineExtensions\Query\Mysql\UnixTimestamp;
use DoctrineExtensions\Query\Mysql\UtcTimestamp;
use DoctrineExtensions\Query\Mysql\Week;
use DoctrineExtensions\Query\Mysql\WeekDay;
use DoctrineExtensions\Query\Mysql\Year;
use DoctrineExtensions\Query\Mysql\YearMonth;
use DoctrineExtensions\Query\Mysql\YearWeek;
use DoctrineExtensions\Query\Mysql\Acos;
use DoctrineExtensions\Query\Mysql\Asin;
use DoctrineExtensions\Query\Mysql\Atan2;
use DoctrineExtensions\Query\Mysql\Atan;
use DoctrineExtensions\Query\Mysql\BitCount;
use DoctrineExtensions\Query\Mysql\BitXor;
use DoctrineExtensions\Query\Mysql\Ceil;
use DoctrineExtensions\Query\Mysql\Cos;
use DoctrineExtensions\Query\Mysql\Cot;
use DoctrineExtensions\Query\Mysql\Degrees;
use DoctrineExtensions\Query\Mysql\Exp;
use DoctrineExtensions\Query\Mysql\Floor;
use DoctrineExtensions\Query\Mysql\Log;
use DoctrineExtensions\Query\Mysql\Log10;
use DoctrineExtensions\Query\Mysql\Log2;
use DoctrineExtensions\Query\Mysql\Pi;
use DoctrineExtensions\Query\Mysql\Power;
use DoctrineExtensions\Query\Mysql\Quarter;
use DoctrineExtensions\Query\Mysql\Radians;
use DoctrineExtensions\Query\Mysql\Rand;
use DoctrineExtensions\Query\Mysql\Round;
use DoctrineExtensions\Query\Mysql\StdDev;
use DoctrineExtensions\Query\Mysql\Sin;
use DoctrineExtensions\Query\Mysql\Std;
use DoctrineExtensions\Query\Mysql\Tan;
use DoctrineExtensions\Query\Mysql\Variance;
use DoctrineExtensions\Query\Mysql\AesDecrypt;
use DoctrineExtensions\Query\Mysql\AesEncrypt;
use DoctrineExtensions\Query\Mysql\AnyValue;
use DoctrineExtensions\Query\Mysql\Ascii;
use DoctrineExtensions\Query\Mysql\Binary;
use DoctrineExtensions\Query\Mysql\CharLength;
use DoctrineExtensions\Query\Mysql\Collate;
use DoctrineExtensions\Query\Mysql\ConcatWs;
use DoctrineExtensions\Query\Mysql\CountIf;
use DoctrineExtensions\Query\Mysql\Crc32;
use DoctrineExtensions\Query\Mysql\Field;
use DoctrineExtensions\Query\Mysql\FindInSet;
use DoctrineExtensions\Query\Mysql\Greatest;
use DoctrineExtensions\Query\Mysql\GroupConcat;
use DoctrineExtensions\Query\Mysql\IfElse;
use DoctrineExtensions\Query\Mysql\IfNull;
use DoctrineExtensions\Query\Mysql\Least;
use DoctrineExtensions\Query\Mysql\Lpad;
use DoctrineExtensions\Query\Mysql\MatchAgainst;
use DoctrineExtensions\Query\Mysql\Md5;
use DoctrineExtensions\Query\Mysql\NullIf;
use DoctrineExtensions\Query\Mysql\Regexp;
use DoctrineExtensions\Query\Mysql\Replace;
use DoctrineExtensions\Query\Mysql\Rpad;
use DoctrineExtensions\Query\Mysql\Sha1;
use DoctrineExtensions\Query\Mysql\Sha2;
use DoctrineExtensions\Query\Mysql\Soundex;
use DoctrineExtensions\Query\Mysql\SubstringIndex;
use DoctrineExtensions\Query\Mysql\UuidShort;
use DoctrineExtensions\Query\Mysql\Hex;
use DoctrineExtensions\Query\Mysql\Unhex;

return [
    'doctrine' => [
        'configuration' => [
            'orm_default' => [
                'datetime_functions' => [
                    'convert_tz' => ConvertTz::class,
                    'curdate' => Curdate::class,
                    'date' => Date::class,
                    'date_format' => DateFormat::class,
                    'dateadd' => DateAdd::class,
                    'datesub' => DateSub::class,
                    'datediff' => DateDiff::class,
                    'day' => Day::class,
                    'dayname' => DayName::class,
                    'dayofweek' => DayOfWeek::class,
                    'dayofyear' => DayOfYear::class,
                    'div' => Div::class,
                    'from_unixtime' => FromUnixtime::class,
                    'hour' => Hour::class,
                    'last_day' => LastDay::class,
                    'minute' => Minute::class,
                    'now' => Now::class,
                    'month' => Month::class,
                    'monthname' => MonthName::class,
                    'period_diff' => PeriodDiff::class,
                    'second' => Second::class,
                    'sectotime' => SecToTime::class,
                    'strtodate' => StrToDate::class,
                    'time' => Time::class,
                    'timediff' => TimeDiff::class,
                    'timestampadd' => TimestampAdd::class,
                    'timestampdiff' => TimestampDiff::class,
                    'timetosec' => TimeToSec::class,
                    'week' => Week::class,
                    'weekday' => WeekDay::class,
                    'year' => Year::class,
                    'yearmonth' => YearMonth::class,
                    'yearweek' => YearWeek::class,
                    'unix_timestamp' => UnixTimestamp::class,
                    'utc_timestamp' => UtcTimestamp::class,
                    'extract' => Extract::class
                ],
                'numeric_functions' => [
                    'acos' => Acos::class,
                    'asin' => Asin::class,
                    'atan2' => Atan2::class,
                    'atan' => Atan::class,
                    'bit_count' => BitCount::class,
                    'bit_xor' => BitXor::class,
                    'ceil' => Ceil::class,
                    'cos' => Cos::class,
                    'cot' => Cot::class,
                    'degrees' => Degrees::class,
                    'exp' => Exp::class,
                    'floor' => Floor::class,
                    'log' => Log::class,
                    'log10' => Log10::class,
                    'log2' => Log2::class,
                    'pi' => Pi::class,
                    'power' => Power::class,
                    'quarter' => Quarter::class,
                    'radians' => Radians::class,
                    'rand' => Rand::class,
                    'round' => Round::class,
                    'stddev' => StdDev::class,
                    'sin' => Sin::class,
                    'std' => Std::class,
                    'tan' => Tan::class,
                    'variance' => Variance::class,
                ],
                'string_functions' => [
                    'aes_decrypt' => AesDecrypt::class,
                    'aes_encrypt' => AesEncrypt::class,
                    'any_value' => AnyValue::class,
                    'ascii' => Ascii::class,
                    'binary' => Binary::class,
                    'char_length' => CharLength::class,
                    'collate' => Collate::class,
                    'concat_ws' => ConcatWs::class,
                    'countif' => CountIf::class,
                    'crc32' => Crc32::class,
                    'degrees' => Degrees::class,
                    'field' => Field::class,
                    'find_in_set' => FindInSet::class,
                    'greatest' => Greatest::class,
                    'group_concat' => GroupConcat::class,
                    'ifelse' => IfElse::class,
                    'ifnull' => IfNull::class,
                    'least' => Least::class,
                    'lpad' => Lpad::class,
                    'match' => MatchAgainst::class,
                    'md5' => Md5::class,
                    'nullif' => NullIf::class,
                    'radians' => Radians::class,
                    'regexp' => Regexp::class,
                    'replace' => Replace::class,
                    'rpad' => Rpad::class,
                    'sha1' => Sha1::class,
                    'sha2' => Sha2::class,
                    'soundex' => Soundex::class,
                    'str_to_date' => StrToDate::class,
                    'substring_index' => SubstringIndex::class,
                    'uuid_short' => UuidShort::class,
                    'hex' => Hex::class,
                    'unhex' => Unhex::class
                ]
            ]
        ]
    ]
];
