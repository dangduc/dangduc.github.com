PP_FILES := $(wildcard *.pp)
PMD_FILES := $(wildcard *.pmd)
PP_OUTPUT := $(PP_FILES:.pp=)
PMD_OUTPUT := $(PMD_FILES:.pmd=)
OUTPUT_FILES := $(PP_OUTPUT) $(PMD_OUTPUT)

all: $(OUTPUT_FILES)

%: %.pp
	raco pollen render $<

%: %.pmd
	raco pollen render $<

clean:
	rm -f $(OUTPUT_FILES)

.PHONY: all clean
