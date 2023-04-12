input_text = ''''''

lines = input_text.split('\n')

formatted_lines = []

for line in lines:
    formatted_lines.append({"body": line.strip()})

import json
output_json = json.dumps(formatted_lines, ensure_ascii=False, indent=4)
print(output_json)